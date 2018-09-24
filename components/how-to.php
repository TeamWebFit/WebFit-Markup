Bitte alle Komponenten im Ordner "compontens" anlegen und dann per PHP inkludieren. <br />
            Der typische Seitenaufbau sieht wie folgt aus:<br /><br />
        <div class="code"> 
            <code>
                    &lt;?php <br />
                    include ("components/header.php");<br />
                    <br />
                    <p style="color: green">&lt;!--- ab hier können dann Componenten inkludiert werden --&gt;</p>
                    
                    include ("components/button.php");<br />
                    include ("components/alert.php");<br />
                    include ("components/quote.php");<br />
                    <br />
                    <p style="color: green">&lt;!--- Komponenten ENDE --&gt;</p>
                    
                    include ("components/footer.php");
                    <br />
                ?&gt;
            </code>
</div>
            <br />
            <br />
Zum starten des Lokalen-Servers bitte folgendes Kommando ins Terminal eingeben:
<code>
    npm start
</code>