<style>
    /* Layout CSS */
    :root {
        --window-width: 75%;
        --min-window-width: 350px;
        --fontsize-1: 1rem;
        --fontsize-2: 1.5rem;
        --fontsize-3: 2rem;
        --fontsize-4: 2.5rem;
        --error-text: red;
    }
    .active {
        color: blue;
    }
    .layout-footer {
        margin-top: var(--fontsize-4);
        background-color: darkgrey;
        width: 100%;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    img {
       margin: var(--fontsize-1);
    }
    .title {
        font-size: var(--fontsize-2);
    }
    * {
        margin: 0; padding: 0;
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .layout-topbar {
        
        box-shadow: 0 4px 2px -2px rgba(99, 99, 99, 0.2);
        flex-wrap: wrap;
        height: 50%;
        padding: 0.5rem;
        color: black;
        font-size: var(--fontsize-4);
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: var(--window-width);
        min-width: var(--min-window-width);
        margin: 0 auto;
        background-color: white;
    }
    a {
        text-decoration: none;
        color: black;
        cursor: pointer;
        margin-right: .5rem;
        margin-top: .25rem;
        margin-bottom: .25rem;
    }

    .layout-title {
        font-size: var(--fontsize-4);
    }
    .layout-toptop {
        color: grey;
        width: var(--window-width);
        min-width: var(--min-window-width);
        margin: 0 auto;
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
    }

    .layout-containerall {
        display: flex;
        flex-direction: column;
    }
    .layout-toptop > * {
        color: grey;
    }

    .layout-title {
        font-size: var(--fontsize-4);
    }
    .layout-content {
        top: 50px;
        min-width: var(--min-window-width);

        width: var(--window-width);
        margin: 0 auto;
        margin-top: 1.5rem;

    }
    .layout-logout-a {
        color: white;
        background-color: black;
        padding: 0.5rem;
    }
    .layout-logout-a:hover {
        color: black;
        background-color:grey;
        padding: 0.5rem;
    }
    .clickable {
        color: blue;
    }
    .errortxt {
        color: var(--error-text);
    }
    input {
        margin: 2px;
        padding: 2px;
    }
    input {
        color: white;
        background-color: black;
        padding: 0.25rem;
    }
    input:hover {
        color: black;
        background-color: white;
    }
</style>