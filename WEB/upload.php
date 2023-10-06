<!DOCTYPE html>
<html>
<head>
    <title>Multiple Picture Upload</title>
</head>
<body>
    <h1>Upload Pictures</h1>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Directory where you want to save the uploaded pictures
        $uploadDir = 'uploads/';
        

        // Create the uploads directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        
        
        // Loop through the uploaded files
        foreach ($_FILES["pictures"]["tmp_name"] as $key => $tmp_name) {
            $uploadFile = $uploadDir . basename($_FILES["pictures"]["name"][$key]);

            // Check if the file already exists
            if (file_exists($uploadFile)) {
                echo "File " . $_FILES["pictures"]["name"][$key] . " already exists.<br>";
            } else {
                // Move the uploaded file to the specified directory
                if (move_uploaded_file($tmp_name, $uploadFile)) {
                    echo "File " . $_FILES["pictures"]["name"][$key] . " has been uploaded successfully.<br>";
                } else {
                    echo "Error uploading " . $_FILES["pictures"]["name"][$key] . ".<br>";
                }
            }
        }
    }


    ?>

    <h2>Uploaded Pictures</h2>
    <div>
        <?php
        $uploadedFiles = glob($uploadDir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        foreach ($uploadedFiles as $file) {
            echo '<img src="' . $file . '" alt="' . basename($file) . '" width="200" />';
        }
        ?>
    </div>
    
</body>
</html>