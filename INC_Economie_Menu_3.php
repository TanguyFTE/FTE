<div class="tabs__tablist" role="tablist" aria-label="Presskits et actualités de Dassault Aviation" data-title="Filtrer par" data-placeholder="Choisir un thème">
                                            <span class="tabs__label">Filtrer par : </span>
									        <button class="tabs__tab tax__color-bleu"data-color="tax__color-bleu"role="tab"aria-selected="false"aria-controls="tab-panel-categorie-dassault-aviation"id="tab-categorie-energie">
                                                Energie
                                            </button>
								            <button class="tabs__tab tax__color-rouge"data-color="tax__color-rouge"role="tab"aria-selected="false"aria-controls="tab-panel-categorie-defense"id="tab-categorie-transport">
                                                Transports
                                            </button>
									        <button class="tabs__tab tax__color-gris"data-color="tax__color-gris"role="tab"aria-selected="true"aria-controls="tab-panel-categorie-falcon"id="tab-categorie-industrie">
                                                Industrie
                                            </button>
									        <button class="tabs__tab tax__color-bleuc" data-color="tax__color-bleuc"role="tab"aria-selected="false"aria-controls="tab-panel-categorie-space"id="tab-categorie-entreprises">
                                                Entreprises
                                            </button>
                                            <button class="tabs__tab tax__color-vert"data-color="tax__color-vert"role="tab"aria-selected="false"aria-controls="tab-panel-categorie-passion"id="tab-categorie-armee">
                                                Armée
                                            </button>
								            <span class="tabs__decoration" aria-hidden="true"></span>
                                        </div>
                                        <script>
                                            // Simule un clic sur le bouton "Transports" au chargement de la page
                                            window.onload = function () {
                                                var transportsButton = document.getElementById('tab-categorie-industrie');
                                                if (transportsButton) {
                                                    transportsButton.click();
                                                }
                                            };
                                        </script>