const tableData = [
    { id: 1, image: 'img/sliderimg1.png', button: 'Lorem Ipsum' },
    { id: 2, image: 'img/sliderimg1.png', button: 'Lorem Ipsum' },
    { id: 3, image: 'img/sliderimg1.png', button: 'Lorem Ipsum' },
    { id: 4, image: 'img/sliderimg1.png', button: 'Lorem Ipsum' },
    { id: 5, image: 'img/sliderimg1.png', button: 'Lorem Ipsum' },
    { id: 6, image: 'img/sliderimg1.png', button: 'Lorem Ipsum' }
    // Add more data as needed
];

function displayCategory() {
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

// Call the function to render the data
displayCategory();
