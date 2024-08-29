const productsPerPage = 18; // Number of products to display per page
let currentPage = 1;
let totalPages = 1;
let products = []; // Initialize products array

// Function to fetch products from the server
async function fetchProducts() {
    try {
        const response = await fetch('/api/products');
        if (!response.ok) throw new Error('Network response was not ok');
        products = await response.json();
        totalPages = Math.ceil(products.length / productsPerPage);
        displayProducts(currentPage);
    } catch (error) {
        console.error('Failed to fetch products:', error);
    }
}

// Function to display products for the current page
function displayProducts(page) {
    const productRow = document.getElementById("product-row");
    productRow.innerHTML = ""; // Clear existing products

    const startIndex = (page - 1) * productsPerPage;
    const endIndex = Math.min(startIndex + productsPerPage, products.length);

    for (let i = startIndex; i < endIndex; i++) {
        const product = products[i];
        const colDiv = document.createElement("div");
        colDiv.className = "col-md-4  position-relative mb-1";
        const productHTML = `
                <div class="product-card p-3">
                    <img src="${product.image}" alt="${product.name}" class="product-image rounded">
                    <div class="product-info mx-2">
                        <h5 class="m-0">${product.name}</h5>
                        <p class="m-0">${product.category}</p>
                        <p class="m-0">${product.price}</p>
                    </div>
                    <div class="action-buttons d-flex position-absolute top-0 end-0 p-4">
                        <a href="/edit_product/${product.id}" class="action-button pe-2"><i class="fas fa-pencil-alt text-dark"></i></a>
                        <a href="#" class="action-button pe-3" onclick="showDeleteConfirm(${product.id})"><i class="fas fa-trash text-dark"></i></a>
                    </div>
                </div>
            
        `;
        colDiv.innerHTML = productHTML;
        productRow.appendChild(colDiv);
    }

    // Update pagination
    updatePagination();
}

// Function to update the pagination controls
function updatePagination() {
    const paginationNumbers = document.getElementById("pagination-numbers");
    paginationNumbers.innerHTML = ""; // Clear existing page numbers

    for (let i = 1; i <= totalPages; i++) {
        const pageButton = document.createElement("button");
        pageButton.className = "btn";
        pageButton.innerText = i;
        if (i === currentPage) {
            pageButton.classList.add("active-page");
        }
        pageButton.addEventListener("click", function () {
            currentPage = i;
            displayProducts(currentPage);
        });
        paginationNumbers.appendChild(pageButton);
    }

    document.getElementById("prev-btn").disabled = currentPage === 1;
    document.getElementById("next-btn").disabled = currentPage === totalPages;
}

// Function to show the delete confirmation modal
function showDeleteModal(productId) {
    currentProductToDelete = productId; // Set the current product to delete
    $('#deleteModal').modal('show'); // Show Bootstrap modal
}

// Function to handle delete confirmation
document.getElementById("confirmDeleteBtn").addEventListener("click", function () {
    if (currentProductToDelete !== null) {
        // Remove the product from the list
        const productIndex = products.findIndex(p => p.id === currentProductToDelete);
        if (productIndex > -1) {
            products.splice(productIndex, 1);
        }
        currentProductToDelete = null; // Reset after deletion
        $('#deleteModal').modal('hide'); // Hide the modal
        displayProducts(currentPage); // Refresh the product display
    }
});

// Function to go to the next page
function nextPage() {
    if (currentPage < totalPages) {
        currentPage++;
        displayProducts(currentPage);
    }
}

// Function to go to the previous page
function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        displayProducts(currentPage);
    }
}

// Initial fetch and display
fetchProducts();
