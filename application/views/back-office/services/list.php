<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Liste</h5>
                    <a type="button" href="#" class="btn btn-primary">
                        Ajouter
                        <i class="ms-1 bi bi-plus-circle"></i>
                    </a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Durée</th>
                        <th scope="col">Prix</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($services as $service): ?>
                        <tr>
                            <td><?= $service['id'] ?></td>
                            <td><?= $service['nom'] ?></td>
                            <td><?= $service['duree'] ?></td>
                            <td><?= $service['prix'] ?></td>
                            <td class="d-flex justify-content-evenly">
                                <button type="button" class="btn btn-dark"><i class="bi bi-pencil-fill"></i></button>
                                <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
