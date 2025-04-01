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

async function felhasznaloDestory(url){
    try{
        const formData = new FormData(document.getElementById('destroyFelhasznaloFrm'));
        const response = await fetch(url,{
            method:'POST',
            body: formData
        });
        if(!response.ok){
            throw new Error('HÁLÓZAT HIBA VAN');
        }
        const result = await response.json();
        $("#confirmationModal").modal('hide');
        $("#user_"+result.id).remove();
    }catch(error){
        console.log("Hiba történt a hálózaton",error);
    }
}