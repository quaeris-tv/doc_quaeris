---
title: Question Charts
description: Domande del questionario
extends: _layouts.documentation
section: content
---

# Domande del questionario {#question-charts}

Per accedere all’elenco delle domande di un questionario, si può arrivare scrollando verso il basso della pagina di modifica di un survey  
![Lista Domande](https://quaeris-tv.github.io/doc_quaeris/assets/images/index_question_charts.png "lista domande")

## Creazione

Per creare una domanda, che poi verrà visualizzata nel pdf, utilizzare bottone in alto a destra **Nuovo**, che mostrerà un modal dove si dovranno impostare i vari settaggi per la creazione di un grafico sul pdf  
![Crea Domanda](https://quaeris-tv.github.io/doc_quaeris/assets/images/save_question_chart.png "crea domanda")  
    • **domande**: selezionare la domanda interessata che si vuole visualizzare col grafico  
    • **group_name**: stringa relativa al gruppo a cui fa parte la domanda in questione. Se inserita, nel pdf, prima della pagina col grafico relativa alla domanda, verrà creata una pagina che avrà come titolo la stringa inserita.  
    • **answer_value**: utilizzato per le tipologie di domande con risposta si/no, selezionare l’opzione “positiva” alla domanda  
    • **answer_value_txt/answer_value_no_txt**: stringhe che verranno visualizzate come legende nel grafico a ciambella  
    • **data_type**: alcune domande “da 1 a 10” hanno una undicesima opzione tipo “non so/non saprei” con un codice stringa abbinato. In questi casi bisogna settare l’opzione data_type con il valore “da zero a dieci” per escludere dal risultato finale tutte le risposte “non so/non saprei”  
    • **take**: generalmente si imposta a -3, per avere solo gli ultimi 3 raggruppamenti temporali per i grafici a barre verticali  
    • **pos**: numero della posizione nell’indice dei grafici. A volte può capitare, di voler modificare l’ordine delle domande/grafici nel pdf  
    • **show_on_pdf**: se settato, la domanda che si sta impostando verrà visualizzata nel pdf.  
    • **min/max**: valore minimo e massimo delle asse Y per i grafici a barre verticali. Per i grafici relativi alla media l’impostazione massima è sempre 10, per gli altri grafici varia in base ai risultati