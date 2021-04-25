<?php
var_dump($_POST);
var_dump($_FILES);
class Form
{
    public $name;
    public $country;
    public $color;
    public $yes;
    public $fname;

    public function __construct()
    {
        $this->name = $_POST['name'];
        $this->country = $_POST['country'];
        $this->color = $_POST['color'];
        $this->yes = $_POST['yes'];
    }

    public function SaveFile()
    {
        if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == "Отправить запрос") {
            if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
                // get details of the uploaded file
                $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
                $fileName = $_FILES['uploadedFile']['name'];
                $fileSize = $_FILES['uploadedFile']['size'];
                $fileType = $_FILES['uploadedFile']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));

                // sanitize file-name
                $this->fname = $fileName;

                // check if file has one of the following extensions
                $allowedfileExtensions = array('jpg','png');

                if (in_array($fileExtension, $allowedfileExtensions)) {
                    // directory in which the uploaded file will be moved
                    $uploadFileDir = './pictures/';
                    $dest_path = $uploadFileDir . $this->fname ;
                    if(!move_uploaded_file($fileTmpPath, $dest_path)) {
                        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                    }
                } else {
                    $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
                }
            } else {
                $message = 'There is some error in the file upload. Please check the following error.<br>';
                $message .= 'Error:' . $_FILES['uploadedFile']['error'];
            }
        }
        if (isset($message)) {
            echo $message;
        }
    }

    public function DeleteFile()
    {
        unlink('./pictures/'.$this->fname);
    }
}

$form = new Form;
$form->SaveFile();
$form->DeleteFile();
?>