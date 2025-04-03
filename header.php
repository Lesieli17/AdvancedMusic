<style>

    header {
        display: flex;
        align-items: center;
        background-color: #8CE2D0;
    }
    header img{
        max-width: 100%;
    }
    header figure{
        max-width: 20%;
        margin: 1em;
        margin-left: 2em;
    }
    header h1 { 
        font-family: 'Shadows Into Light', cursive;
        font-size: 250%;
        font-weight: lighter;
        color: inherit;
    }

    nav {
        display: flex;
        background-color: #280071;
        border-top: solid black thin;
        border-bottom: solid black thin;
    }
    nav p{
        flex: 1 1 100px;
        text-align: center;

    }
    nav a { 
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }
    nav a:hover { 
        text-decoration: none;
        color: #e91e63;
        font-weight: bold;
    }
    nav label{
        display: none;
    }
</style> 
  <header>
        <figure>
            <img src="images/lc-mint.png" width="100" alt="Learn Coach Logo.">
        </figure>
        <h1>Digital Media. Advanced Websites</h1>
    </header>
    <nav>
        <label for="navCheck"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="navCheck">         
        <div id="menuItems">
            <p><a href="index.php">Home</a></p>
            <p><a href="music.php">Music</a></p>
            <p><a href="addMusic.php">Add Music</a></p>
        </div>
    </nav>