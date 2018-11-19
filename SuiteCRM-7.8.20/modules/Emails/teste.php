<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

	<form id="uploadAttachment" name="uploadAttachment" method='POST' action="teste.php" enctype='multipart/form-data'>
				<input type="hidden" name="to_pdf" value="true">
				<input type="hidden" name="module" value="Emails">
				<input type="hidden" name="action" value="EmailUIAjax">
				<input type="hidden" name="emailUIAction" value="uploadAttachment">
				<input type='file' name='email_attachment[]' id='email_attachment' multiple size='30' />&nbsp;
				<!--<input type="button" onclick="SUGAR.email2.composeLayout.uploadAttachment();" class="button" value="{$app_strings.LBL_EMAIL_ATTACH_FILE_TO_EMAIL}" />-->
				<input type="submit">
			</form>

    <form action="teste.php" method="post" multipart="" enctype="multipart/form-data">
		<input type="file" name="email_attachment[]" multiple>

        <input type="submit">
    </form>
</body>
</html>

Part II : PHP

<?php
echo '<pre>';
$img = $_FILES['email_attachment'];

if(!empty($img))
{	
	echo "teste";
	
	$img_desc = reArrayFiles($img);
	
    print_r($img_desc);
    

}

function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
	}
	

    return $file_ary;
}