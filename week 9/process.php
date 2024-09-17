<?php
$errors = [];
$data = [];

// Validation
if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}

if (empty($_POST['superheroAlias'])) {
    $errors['superheroAlias'] = 'Superhero alias is required.';
}

// If there are errors, send them back
if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Form submitted successfully!';
}

echo json_encode($data);
?>
