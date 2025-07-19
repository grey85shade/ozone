<div class="content">
    <h1>Listado de Usuarios</h1>
    <table class="users-table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user['user']); ?></td>
                <td><?php echo htmlspecialchars($user['name']); ?></td>
                <td><?php echo htmlspecialchars($user['surname']); ?></td>
                <td><?php echo htmlspecialchars($user['mail']); ?></td>
                <td><?php echo htmlspecialchars($user['admin']); ?></td>
                <td class="actions">
                    <a href="/userConfig/edit/<?php echo $user['id']; ?>" class="edit-icon">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="/userConfig/delete/<?php echo $user['id']; ?>" class="delete-icon">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
