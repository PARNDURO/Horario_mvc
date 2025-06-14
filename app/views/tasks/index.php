<?php include(__DIR__ . '/../layout.php'); ?>
<script>
    console.log('Datos de la tabla (tasks):', <?= json_encode($tasks) ?>);
</script>

<h1>HORARIO</h1>

<div>

<button class="btn-crear" onclick="window.location.href='?action=create'">Crear</button>

<table border="2">
    <tr>
        <th>Hora</th>
        <th>Lunes   </th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        
    </tr>
    <?php foreach ($tasks as $task): ?>
    <tr>
        <td><?= htmlspecialchars($task['Hora']) ?></td>
        <td><?= htmlspecialchars($task['Lunes']) ?></td>
        <td><?= htmlspecialchars($task['Martes']) ?></td>
        <td><?= htmlspecialchars($task['Miercoles']) ?></td>
        <td><?= htmlspecialchars($task['Jueves']) ?></td>
        <td><?= htmlspecialchars($task['Viernes']) ?></td>

        <td>
            <a href="?action=edit&horarioID=<?= $task['horarioID'] ?>">Editar</a> |
            <a href="?action=delete&horarioID=<?= $task['horarioID'] ?>" onclick="return confirm('¿Eliminar esta tarea?')">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    </div>