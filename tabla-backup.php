


            <table id="tablaContactos" class="table">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Avatar</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Compañia</th>
                        <th>Role</th>
                        <th>Porcentaje</th>
                        <th>Last Acces</th>
                        <th>CRUD</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td> <input type="checkbox"></td>
                            <td>
                                <?php if (isset($user['extension'])): ?>
                                    <img src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="">
                                <?php endif; ?>
                            </td>

                            <td><?php echo $user['name'] ?></td>
                            <td>
                                <a href="mailto:<?php echo $user['mail'] ?>"><?php echo $user['mail']?></a>
                            </td>
                            <td><?php echo $user['company'] ?></td>
                            <td><?php echo $user['role'] ?></td>
                            <td><?php echo $user['profile_rate'] ?> %</td>
                            <td><?php echo $user['last_access'] ?></td>                        
                            <td>
                                <a href="view.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-info" >VIEW</a>
                                <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-secondary" >UPDATE</a>
                                <!-- <a href="delete.php?id=<?php //echo $user['id']?>" class="btn btn-sm btn-outline-danger" >DELETE</a> -->
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $user['id']?>">
                                    <button class="btn btn-sm btn-outline-danger" >Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach;;?>
                </tbody>
            </table>
