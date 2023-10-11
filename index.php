<!-- 

    Descrizione
        Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
        
        Milestone 1
        Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
        
        Milestone 2
        Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
       
        Milestone 3 (BONUS)
        Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
        leggete le slide sulla session e la documentazione
       
        Milestone 4 (BONUS)
        Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

-->

<?php include_once __DIR__ . '/partials/head.php'; ?>

<main class="py-4" id="app_main">
    <div class="container">
        <h1 class="text-center mb-3"> Strong Password Generator</h1>
        <form action="./passwordGen.php" class="bg-dark bg-gradient rounded-3 p-3">

            <label for="pws_length" class="px-4">Insert a length between 8 and 32 to generate your new Password</label>
            <div class="input-group p-4">
                <input class="form-control" type="number" name="pwd_length" id="pwd_length_input" placeholder="Insert a number.." <?= isset($_GET['pwd_length']) ? 'value="' . $_GET['pwd_length'] . '"' : '' ?> min="8" max="32" required>
            </div>
            <!-- /.input-group -->

            <div class="input-group d-flex justify-content-between p-4">
                <label for="">Allow repetitions: </label>
                <div class="radio_inputs d-flex flex-column">
                    <div class="radio">
                        <span>Yes</span>
                        <input type="radio" name="repetitions" id="repetitions_true" value="1" checked>
                    </div>
                    <div class="radio">
                        <span>No</span>
                        <input type="radio" name="repetitions" id="repetitions_false" value="0">
                    </div>
                </div>
            </div>
            <!-- /.input-group -->

            <div class="input-group d-flex justify-content-end p-4">

                <div class="checkbox_inputs d-flex flex-column text-end">

                    <div class="checkbox">
                        <span>Lettere</span>
                        <input type="checkbox" name="letters" id="letters_checkbox" value="1">
                    </div>
                    <div class="checkbox">
                        <span>Numbers</span>
                        <input type="checkbox" name="numbers" id="numbers_checkbox" value="1">
                    </div>
                    <div class="checkbox">
                        <span>Symbols</span>
                        <input type="checkbox" name="symbols" id="symbols_checkbox" value="1">
                    </div>

                </div>
                <!-- /.checkbox_inputs -->

            </div>
            <!-- /.input-group -->

            <a href="index.php" class="btn btn-danger ms-4 mb-4" type="submit">Annulla</a>
            <button class="btn btn-primary ms-4 mb-4" type="submit">Genera</button>
        </form>
        <!-- /form -->
    </div>
    <!-- /.container -->
</main>
<!-- /#app_main -->

<?php include_once __DIR__ . '/partials/footer.php'; ?>