async function showConfirm(url){
    try{
        const response = await fetch(url,{
            method: 'GET'
        });
        if(!response.ok){
            throw new Error('HÁLÓZAT HIBA VAN');
        }
        const result = await response.json();
        $("#confirmationModalContent").html(result.content);
        $("#confirmationModal").modal('show');
    }catch(error){
        console.log("Hiba történt a hálózaton",error);
    }
}


async function futarokDestory(url){
    try{
        const formData = new FormData(document.getElementById('destroyFutarFrm'));
        const response = await fetch(url,{
            method:'POST',
            body: formData
        });
        if(!response.ok){
            throw new Error('HÁLÓZAT HIBA VAN');
        }
        const result = await response.json();
        $("#confirmationModal").modal('hide');
        $("#futar_" + result.id).remove();
    }catch(error){
        console.log("Hiba történt a hálózaton",error);
    }
}