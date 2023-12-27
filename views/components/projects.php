<div class="d-flex flex-wrap justify-content-center">
    <h1 class="w-100 text-center fs-3 py-3">Projetos</h1>
    <div class="row g-4 align-items-stretch projects pb-3">
        <?php
        use App\Models\Project;
        include(ROOT_DIR . '/App/Models/Project.php');
        foreach (Project::get() as $project) {
            $technologies = '';
            foreach ($project->technologies as $technology) {
                $technologies .= "<li>{$technology}</li>";
            }
            $img = BASE_URL . '/public/img/projects/' . $project->image;
            echo "
                <div class='col-12 col-md-6 col-lg-4 project'>
                    <div class='card bg-box border border-1 border-light'>
                        <div class='card-header pt-3 px-3 pb-0'>
                            <img class='project-image rounded border border-1 border-light' src='{$img}' width='100%'></img>
                        </div>
                        <div class='card-body'>
                            <h2 class='card-title fs-5'>{$project->name}</h2>
                            <div class='border p-2 rounded overflow-auto my-2' style='height: 100px;'>
                                <p class='mb-0'>{$project->description}</p>
                            </div>
                            <div class='d-flex flex-wrap gap-2 justify-content-end'>
                                <a href='{$project->server}' target='_blank' class='btn btn-sm btn-outline-primary'>Servidor</a>
                                <a href='{$project->github}' target='_blank' class='btn btn-sm btn-outline-secondary'>GitHub</a>
                            </div>
                            <div class='accordion accordion-flush mt-2' id='accordionFlush-{$project->id}'>
                                <div class='accordion-item'>
                                    <h2 class='accordion-header' id='flush-heading-{$project->id}'>
                                        <button class='accordion-button collapsed p-2' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapse-{$project->id}' aria-expanded='false' aria-controls='flush-collapse-{$project->id}'>
                                        Tecnologias Usadas
                                        </button>
                                    </h2>
                                    <div id='flush-collapse-{$project->id}' class='accordion-collapse collapse' aria-labelledby='flush-heading-{$project->id}' data-bs-parent='#accordionFlush-{$project->id}'>
                                        <div class='accordion-body p-0'>
                                            <ul class='mb-0'>{$technologies}</ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        ?>
    </div>
</div>
