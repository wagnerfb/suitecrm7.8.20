                var newfiles = document.getElementById('uploadAttachment');

                //newfiles.elements.email_attachment = null;

                // aqui eu to clonando o obj files
                var newfiles1 = Object.assign({}, document.getElementById('uploadAttachment').elements.email_attachment.files);
                delete newfiles1['1'];
                delete newfiles1['2'];

                var newfiles2 = Object.assign({}, document.getElementById('uploadAttachment').elements.email_attachment);

                newfiles2.files = newfiles1;    

                newfiles.elements.email_attachment = newfiles2;   

                var formObject = newfiles;
                
                
                console.log(formObject.elements.email_attachment);

                formObject.elements.email_attachment = null;