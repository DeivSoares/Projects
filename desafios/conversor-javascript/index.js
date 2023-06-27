let real = document.getElementById("idnum")
        let dolar = 5.02;

        const btn = document.querySelector('input[type=submit]');
        
        btn.onclick = function() {
            let result = (real.value * dolar).toFixed(2);
            const form = document.querySelector('form')
            const paragraph = document.createElement("p")
            const resultado = document.createTextNode(result);

            form.appendChild(paragraph)
            paragraph.appendChild(resultado)
        }