<main>

    <h1>Template view</h1>

    <?php foreach($templates as $template) : ?>

        <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_exercise">
        
        <label>Exercise Name</label>
        <input type="text" name="email" value="<?php  echo htmlspecialchars($template['exerciseName'])?>"><br>

        <label>Reps</label>
        <input type="text" name="password" value="<?php  echo htmlspecialchars($template['reps'])?>"><br>

        <label>Sets</label>
        <input type="text" name="email" value="<?php  echo htmlspecialchars($template['sets'])?>"><br>

        <label>Weight</label>
        <input type="text" name="password" value="<?php  echo htmlspecialchars($template['weight'])?>"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Exercise" /><br>
    </form>
        <?php endforeach?>
</main>