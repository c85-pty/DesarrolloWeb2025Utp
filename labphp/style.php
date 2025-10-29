<style>
    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        /* Creates three equal-width columns */
        gap: 10px;
        /* Optional: Adds space between grid items */
    }

    .grid-item {
        /* Optional: Add styling for the individual grid items */
        background-color: lightblue;
        padding: 20px;
        text-align: center;
    }

    .container {
        display: grid;
        column-gap: 50px;
        grid-template-columns: auto auto auto;
        background-color: dodgerblue;
        padding: 10px;
    }

    .container>div {
        background-color: #f1f1f1;
        border: 1px solid black;
        padding: 20px;
        font-size: 30px;
        text-align: center;
    }
</style>