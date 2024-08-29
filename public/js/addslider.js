function triggerUpload(inputId) {
    document.getElementById(inputId).click();
  }
  
  function previewImage(inputId, previewId, plusSymbolId, deleteBtnId) {
    const fileInput = document.getElementById(inputId);
    const file = fileInput.files[0];
  
    if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const imagePreview = document.getElementById(previewId);
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block'; // Show image
            document.getElementById(plusSymbolId).style.display = 'none'; // Hide plus symbol
            document.getElementById(deleteBtnId).style.display = 'block'; // Show delete button
        };
        reader.readAsDataURL(file);
    }
  }