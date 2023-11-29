<div class="text-end p-2">
    <a href="#">
        <i data-toggle="tooltip" data-placement="bottom" 
        title="Click to change the category" 
        class="fa-solid <?php echo $_SESSION['icon'] ?> fa-2x">
        </i>
    </a>
</div>

<div id="box">
    <form class="form form-inline col-6" action="functions.php" method="post">
        <legend>Select Category</legend>
        <div class="form-group">
            <select name="wordListCategory" class="form-select">
                <option value="fruits" 
                <?php if(getCategory() == "fruits") 
                { echo "selected"; }
                ?>>Fruits</option>
                <option value="vegetables" 
                <?php if(getCategory() == "vegetables") 
                { echo "selected"; }
                ?>>Vegetables</option>
                <option value="science" 
                <?php if(getCategory() == "science") 
                { echo "selected"; }
                ?>>Science</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-2" name="selectCategory">Submit</button>
    </form>
</div>


