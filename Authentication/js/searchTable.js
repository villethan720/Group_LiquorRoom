document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('searchInput');
    const table = document.querySelector('.alcoholGrid');

    if (!input || !table){
        console.log("Error: input or table field is not found");
        return;
    }

    input.addEventListener('keyup', searchTable);
    
    // Function to search the table based on the input value
    function searchTable() {
        const filter = input.value.toLowerCase(); // Convert to lowercase for case-insensitive search
        const rows = table.getElementsByTagName('tr'); // Get all table rows

        // Loop through each row and hide those that don't match the search term
        for (let i = 0; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            
            //check to see if row has expected number of cells
            if (cells.length > 1) {
                const nameCell = cells[0];
                const nameText = nameCell.textContent || nameCell.innerText;

                //check if name matches the search
                if (nameText.toLowerCase().includes(filter)) {
                    rows[i].style.display = ''; //shows the row if it matches
                } else {
                    rows[i].style.display='none';
                }
            }
        }
    }
});
