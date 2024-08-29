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
  
  function removeImage(inputId, previewId, plusSymbolId, deleteBtnId, event) {
    event.stopPropagation(); // Prevent triggering file input click
    document.getElementById(inputId).value = ''; // Clear the file input
    document.getElementById(previewId).style.display = 'none'; // Hide image preview
    document.getElementById(plusSymbolId).style.display = 'block'; // Show plus symbol
    document.getElementById(deleteBtnId).style.display = 'none'; // Hide delete button
  }
  
//   document.getElementById('addRowBtn').addEventListener('click', function (event) {
//     // Prevent the default action (which might be to submit a form)
//     event.preventDefault();
  
//     // Get the table body
//     var tableBody = document.getElementById('table-body');
  
//     // Create a new row
//     var newRow = document.createElement('tr');
  
//     // Define the new cells with inputs
//     newRow.innerHTML = `
//         <td><input type="text" name="price[]" class="form-control" ></td>
//         <td><input type="text" name="weight[]" class="form-control" ></td>
//         <td><input type="text" name="quantity[]" class="form-control" ></td>
//     `;
  
//     // Append the new row to the table body
//     tableBody.appendChild(newRow);
//   });
  
  
  