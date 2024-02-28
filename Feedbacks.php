<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedbacks</title>
    <link rel="stylesheet" href="AdminHeader.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Feedbacks.css" />
</head>

<body>

<?php
    include('AdminHeader.php');
    ?>
<div class="Main-Container">
    <nav class="side-navbar">
        <ul>
            <li><a href="#"><img src="Images\Dashboard.png">Dashboard</a></li>
            <li><a href="ManageProducts.php"><img src="Images\Products.png">Products</a></li>
            <li><a href="ManageOrders.php"><img src="Images\Orders.png">Orders</a></li>
            <li><a href="ManageAccounts.php"><img src="Images\Accounts.png">Accounts</a></li>
            <li><a href="ManageTickets.php"><img src="Images\Tickets.png">Tickets</a></li>
            <li><a href="Feedbacks.php"><img src="Images\Feedbacks.png">Feedbacks</a></li>
            <li><a href="#"><img src="Images\Promotion.png">Promotions</a></li>
            <li><a href="#"><img src="Images\Settings.png">Settings</a></li>
        </ul>
    </nav>

    <div class="Table-Section">
            <h2>Feedbacks</h2>

        <div class="table-container">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product ID</th>
                        <th>Rating</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data goes here -->   
                    
                </tbody>
            </table>

            <ul class="pagination">
                <!-- Pagination links will go here -->

            </ul>
        </div>

    </div>
</div>
<script>
    // Sample data for demonstration purposes
    const sampleData = [
        { account_id: 1, first_name: 'John', last_name: 'Doe', email: 'john@example.comjohn@example.comjohn@example.comjohn@example.com' },
        { account_id: 2, first_name: 'Jane', last_name: 'Smith', email: 'jane@example.com' },
        { account_id: 3, first_name: 'Bob', last_name: 'Johnson', email: 'bob@example.com'},
        { account_id: 4, first_name: 'Alice', last_name: 'Williams', email: 'alice@example.com'},
        { account_id: 5, first_name: 'Charlie', last_name: 'Brown', email: 'charlie@example.com'},
        { account_id: 6, first_name: 'Eva', last_name: 'Miller', email: 'eva@example.com', address: '987 Birch St', mobile_number: '345-678-9012' },
        { account_id: 7, first_name: 'Eva', last_name: 'Miller', email: 'eva@example.com', address: '987 Birch St', mobile_number: '345-678-9012' },
        { account_id: 8, first_name: 'Eva', last_name: 'Miller', email: 'eva@example.com', address: '987 Birch St', mobile_number: '345-678-9012' },
        { account_id: 9, first_name: 'Eva', last_name: 'Miller', email: 'eva@example.com', address: '987 Birch St', mobile_number: '345-678-9012' },
        { account_id: 10, first_name: 'Eva', last_name: 'Miller', email: 'eva@example.com', address: '987 Birch St', mobile_number: '345-678-9012' },
        { account_id: 11, first_name: 'Eva', last_name: 'Miller', email: 'eva@example.com', address: '987 Birch St', mobile_number: '345-678-9012' },
        // ... (more sample data)
    ];

    const recordsPerPage = 5; // Adjusted to a smaller number for demonstration
    let currentPage = 1;

     function displayTableData() {
        const tableBody = document.querySelector('tbody');
        tableBody.innerHTML = '';

        const startIndex = (currentPage - 1) * recordsPerPage;
        const endIndex = startIndex + recordsPerPage;
        const pageData = sampleData.slice(startIndex, endIndex);

        pageData.forEach(row => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${row.account_id}</td>
                <td>${row.first_name}</td>
                <td>${row.last_name}</td>
                <td>${row.email}</td>
                <td>Action</td>
            `;
            tableBody.appendChild(tr);
        });
    }

    function displayPaginationLinks() {
    const totalPages = Math.ceil(sampleData.length / recordsPerPage);
    const paginationContainer = document.querySelector('.pagination');
    paginationContainer.innerHTML = '';

    // "First Page" link
    const firstPageItem = document.createElement('li');
    const firstPageLink = document.createElement('a');
    firstPageLink.href = '#';
    firstPageLink.textContent = 'First';
    firstPageLink.addEventListener('click', () => {
        currentPage = 1;
        displayTableData();
        displayPaginationLinks();
    });
    if (currentPage === 1) {
        firstPageItem.classList.add('active');
    }
    firstPageItem.appendChild(firstPageLink);
    paginationContainer.appendChild(firstPageItem);

    // Numeric page links
    for (let i = 1; i <= totalPages; i++) {
        const listItem = document.createElement('li');
        const link = document.createElement('a');
        link.href = '#';
        link.textContent = i;

        link.addEventListener('click', () => {
            currentPage = i;
            displayTableData();
            displayPaginationLinks();
        });

        if (i === currentPage) {
            listItem.classList.add('active');
        }

        listItem.appendChild(link);
        paginationContainer.appendChild(listItem);
    }

    // "Last Page" link
    const lastPageItem = document.createElement('li');
    const lastPageLink = document.createElement('a');
    lastPageLink.href = '#';
    lastPageLink.textContent = 'Last';
    lastPageLink.addEventListener('click', () => {
        currentPage = totalPages;
        displayTableData();
        displayPaginationLinks();
    });
    if (currentPage === totalPages) {
        lastPageItem.classList.add('active');
    }
    lastPageItem.appendChild(lastPageLink);
    paginationContainer.appendChild(lastPageItem);
}

    // Initial display
    displayTableData();
    displayPaginationLinks();
</script>


</body>

</html>
