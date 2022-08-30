<?php

class EmailHelper
{
    protected $postData = [];
    protected $errors = [];

    protected $notificationService;

    public function __construct()
    {
        require_once __DIR__ . '/NotificationService.php';
        require_once __DIR__ . '/DataHelper.php';
        $this->notificationService = new NotificationService();
        $dataHelper = new DataHelper();
        $GLOBALS['vars'] = $dataHelper->data;
    }

    public function sendMail()
    {
        $this->postData = $_POST;
        if (empty($this->postData)) {
            $this->notificationService->deleteAll();
            return;
        }
        if (!$this->validate()) {
            foreach ($this->errors as $error) {
                $this->notificationService->setNotification($error['message'], $error['status']);
            }
            return false;
        }
        $this->send();
        $this->notificationService->setNotification('Thanks you, your request has been sent', 'success');
    }

    public function getMessages()
    {
        return $this->notificationService->getAllNotifications();
    }

    public function deleteMessages()
    {
        $this->notificationService->deleteAll();
    }

    protected function send()
    {
        $message = '<pre>' . print_r($this->postData, true) . '</pre>';
        $this->sendEmailUsingSmtp($GLOBALS['vars']['admin_email'],'new request from site', $message);
    }

    protected function validate()
    {
        foreach ($this->postData as $key => $value) {
            if ($key == 'submit') {
                continue;
            }
            if ($this->validateFieldByName($key)) {
                $this->addError(ucfirst($key) . ' is required');
            }
        }
        return empty($this->errors);
    }

    private function validateFieldByName($key)
    {
        return empty($this->postData[$key]);
    }

    private function addError($message, $status = 'error')
    {
        array_push($this->errors, [
            'message' => $message,
            'status' => $status,
        ]);
    }

    private function sendEmailUsingSmtp($to, $subject, $body)
    {
        require_once __DIR__ .'/../vendor/autoload.php';
        $transport = (new Swift_SmtpTransport($GLOBALS['vars']['smtp_host'], $GLOBALS['vars']['smtp_port']))
            ->setUsername($GLOBALS['vars']['smtp_username'])
            ->setPassword($GLOBALS['vars']['smtp_password']);

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message($subject))
            ->setFrom([$GLOBALS['vars']['smtp_send_from']])
            ->setTo([$to, $to => 'Admin'])
            ->setBody($body);

        return $mailer->send($message);
    }
}