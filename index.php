<style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #fixed-header {
        width: 100%;
        position: fixed;
        z-index: 10;
        background-color: white;
        border-bottom: 1px solid #cbcbcb;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 18px 12px 0px 12px;
    }

    #fixed-header>div:first-child {
        display: flex;
        justify-content: space-between;
    }

    .logo {
        display: flex;
        align-items: center;
        column-gap: 5px;
        cursor: pointer;
    }

    .logo>div:nth-child(2) {
        color: #3c4043;
        font-size: 1.32rem;
    }

    .avatar {
        display: flex;
        align-items: center;
        column-gap: 20px;
        padding-right: 25px;
    }

    .avatar>div:nth-child(2) {
        width: 30px;
        height: 30px;
    }

    .avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .navbar {
        display: flex;
        column-gap: 50px;
        color: #5f6368;
        font-size: 0.95rem;
        padding: 10px 0px 0px 5px;
    }

    .navbar div {
        cursor: pointer;
        padding-bottom: 10px;
    }

    .navbar>div:last-child {
        color: #3367d6;
    }

    .navbar>div:last-child::after {
        content: "";
        height: 3px;
        background-color: #3367d6;
        position: relative;
        top: 10px;
        left: -3px;
        display: inline-block;
        width: 100%;
        transform: scaleX(-95%);
    }

    main {
        padding-top: 100px;
    }

    .container div {
        font-size: 1.5rem;
        font-weight: 700;
        color: #3c4043;
        margin-top: 70px;
        margin-bottom: 25px;
    }

    .container p,
    .container ol {
        margin-bottom: 35px;
        font-size: 0.9rem;
        line-height: 23px;
    }

    .container li {
        margin-top: 12px;
    }

    .container li p {
        display: none;

    }

    .container span {
        font-size: 1.1rem;
    }

    .container {
        max-width: 950px;
        margin: 0 auto;
        padding-top: 25px;
    }
</style>

<?php

$navLinks = [
    'Introduzione',
    'Norme sulla privacy',
    'Termini di servizio',
    'Tecnologie',
    'Domande Frequenti'
];

$faqs = [
    [
        'question' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'answer' => [
            'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.',
            'Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.',
            'Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.',
            'Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.',
            'Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.',
        ]
    ],
    [
        'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'answer' => [
            'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.',
            'Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.',
            'Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.',
            'Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.',
        ]
    ],
    [
        'question' => 'Perché il mio account è associato a un paese?',
        'answer' => [
            'Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:',
            '<ol><li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:',
            '<ol type="a"><li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell\'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>',
            '<li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li></ol></li>',
            '<li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li></ol>',
            'Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.',
        ]
    ],
    [
        'question' => '<span>Stabilire il paese associato al tuo account</span>',
        'answer' => [
            'Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell\'ultimo anno.',
            'I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l\'associazione del paese.',
            'Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l\'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato.',
        ]
    ],
    [
        'question' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
        'answer' => [
            'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.',
        ]
    ],
    [
        'question' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
        'answer' => [
            'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\' esatte parole chiave che hanno determinato il clic su un annuncio.',
        ]
    ],
];

?>

<div id="fixed-header">
    <div>
        <div class="logo">
            <div>
                <img src="googlelogo.png" alt="Google Logo">
            </div>
            <div>
                Privacy e termini
            </div>
        </div>
        <div class="avatar">
            <div>
                <!-- icona dei 9 dots -->
            </div>
            <div>
                <img src="avatar.png" alt="Avatar">
            </div>
        </div>
    </div>
    <div class="navbar">
        <?php
        foreach ($navLinks as $link) {

        ?>

            <div>
                <?= $link ?>
            </div>

        <?php
        }
        ?>
    </div>
</div>

<main>
    <div class="container">

        <?php
        foreach ($faqs as $faq) {

            foreach ($faq as $periodType => $value) {
                if ($periodType == 'question') {

        ?>

                    <div>
                        <?php echo $value ?>
                    </div>

                    <?php

                } elseif ($periodType == 'answer') {

                    for ($j = 0; $j < count($value); $j++) {

                    ?>

                        <p>
                            <?php echo $value[$j] ?>
                        </p>

        <?php
                    }
                }
            };
        }
        ?>
    </div>
</main>