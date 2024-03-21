function validateForm() {
  const fileInput = document.getElementById('fileInput');
  const allowedExtensions = ['.jpg', '.jpeg', '.png', '.pdf'];

  // Validate file type
  const fileName = fileInput.value.toLowerCase();
  if (!allowedExtensions.some(ext => fileName.endsWith(ext))) {
    alert('Invalid file type. Allowed types: ' + allowedExtensions.join(', '));
    return false;
  }

  return true;
}
 