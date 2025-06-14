<?php include(__DIR__ . '/../layout.php'); ?>
<!--ESTE ES EL ARCHIVO QUE SE CONECTA CON EL HTML-->
<script>
    console.log('Variable task en el formulario:', <?= json_encode($task ?? null) ?>);
</script>
<h1><?= isset($task) ? 'Editar' : 'Crear' ?> Tarea</h1>
<form method="POST" action="/Horario_mvc/public/index.php?action=<?= (isset($task) && $task) ? 'update&horarioID=1' : 'store' ?>">

    <input type="time" name="Hora" placeholder="Hora" value="<?= $task['Hora'] ?? '' ?>" required><br>
    <!--required significa que es obligatorio-->
    <input type="text" name="Lunes" placeholder="Lunes" value="<?= $task['Lunes'] ?? '' ?>"><br>
    <input type="text" name="Martes" value="<?= $task['Martes'] ?? '' ?>"><br>
    <input type="text" name="Miercoles" value="<?= $task['Miercoles'] ?? '' ?>"><br>
    <input type="text" name="Jueves" value="<?= $task['Jueves'] ?? '' ?>"><br>
    <input type="text" name="Viernes" value="<?= $task['Viernes'] ?? '' ?>"><br>

    <button type="submit">Guardar</button>
</form>
