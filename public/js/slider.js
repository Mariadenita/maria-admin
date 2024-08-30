const tableData = [
    { id: 1, image: 'img/sliderimg1.png', button: 'slider button' },
    { id: 2, image: 'img/sliderimg1.png', button: 'slider button' },
    { id: 3, image: 'img/sliderimg1.png', button: 'slider button' },
    { id: 4, image: 'img/sliderimg1.png', button: 'slider button' },
    { id: 5, image: 'img/sliderimg1.png', button: 'slider button' },
    { id: 6, image: 'img/sliderimg1.png', button: 'slider button' }
    // Add more data as needed
];
// Variable to store the ID of the slider to be deleted
let sliderToDelete = null;

function confirmDelete(id) {
    // Store the id of the slider to delete
    sliderToDelete = id;
    
    // Show the modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}

document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
    if (sliderToDelete !== null) {
        deleteSlider(sliderToDelete);
    }
});

function deleteSlider(id) {
    // Perform the delete operation here
    console.log(`Deleting slider with ID: ${id}`);
    // Remove the slider from tableData or make an API call to delete the slider

    // Hide the modal after deleting
    const deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
    deleteModal.hide();

    // Optionally, re-fetch the sliders from the server or remove the row from the DOM
    displaySliders();
}

// Display sliders function as is
function displaySliders() {
    const tbody = document.getElementById('tableBody');
    tbody.innerHTML = '';

    tableData.forEach(item => {
        const row = document.createElement('tr');
        row.classList.add('align-middle');

        row.innerHTML = `
            <td>${item.id}</td>
            <td><img src="${item.image}" alt="Slider Image"></td>
            <td>${item.button}</td>
            <td><a href="#" onclick="editItem(${item.id})"><i class="fas fa-pencil-alt text-dark"></i></a></td>
            <td><a href="#" onclick="confirmDelete(${item.id})"><i class="fas fa-trash text-dark"></i></a></td>
        `;
        
        tbody.appendChild(row);
    });
}

// Initial render
displaySliders();


