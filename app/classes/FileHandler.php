<?php

namespace App\Classes;

/**
 * FileHandler
 * */
class FileHandler
{
    protected $name;
    protected $maxSize = 2470738;

    /**
     * @return Filename
     * */
    public function getName($file, $name = "")
    {
        if ($name == "") {
            $name = pathinfo($file->file->tmp_name, PATHINFO_FILENAME);
            $name = strtolower(str_replace(["-", " "], "_", $name));
            $ext = pathinfo($file->file->name, PATHINFO_EXTENSION);
            $hash = md5(microtime());
            // Set File
            return "{$name}_{$hash}.{$ext}";
        }
    }

    /**
     * Check Valid File Size
     * */
    function checkSize($file)
    {
        return $file->file->size > $this->maxSize ? true : false;
    }

    /**
     * Check Valid File
     * */
    public function isImage($file)
    {
        $ext = pathinfo($file->file->name, PATHINFO_EXTENSION);
        $validFile = [
            "jpg",
            "jpeg",
            "png"
        ];
        return in_array($ext, $validFile);
    }

    /**
     * @move File
     * */
    public function move($file)
    {
        $fileName = $this->getName($file);
        if ($this->isImage($file)) {
            if (!$this->checkSize($file)) {
                /**
                 * Move File
                 * */
                $path = APP_ROOT . '/public/assets/uploads/';
                if (!is_dir($path)) {
                    mkdir($path);
                }
                $file_path = $path . $fileName;
                $this->name = $fileName;
                move_uploaded_file($file->file->tmp_name, $file_path);

            } else {
                return "File Size Exceed!";
            }
        } else {
            return "Only Image File Accept!";
        }
    }

    /*
    Get File Name
    */
    function getFileName()
    {
        return $this->name;
    }
}
