<?php
class DataHelper
{
    public $data = [];
    protected $file = __DIR__ . '/../.env';

    public function __construct()
    {
        $handle = fopen($this->file, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $temp = explode('=', $line);
                if (count($temp) != 2) {
                    continue;
                }
                $this->data[trim($temp[0])] = trim($temp[1]);
            }
            fclose($handle);
        }
    }
}