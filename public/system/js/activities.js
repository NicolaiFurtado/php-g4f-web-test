function addSeries(url, title){
    $.post(url.toString(), {  }, function(data){
        document.getElementById("modalTitle").innerHTML = title;
        $('#modalInfo').html(data);
        $('#systemModal').modal('show');
    });
}

function editSerie(url, serieId, title){
    $.post(url.toString(), { serieId:serieId }, function(data){
        document.getElementById("modalTitle").innerHTML = title;
        $('#modalInfo').html(data);
        $('#systemModal').modal('show');
    });
}

function deleteSerie(url, serieId){
    Swal.fire({
        title: 'Exclusão de Série',
        text: 'Você está disposto a excluir a série? Não será possível reverter essa situação.',
        type: 'error',
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, confirmo!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post(url.toString(), { serieId:serieId }, function(data){
                if(parseInt(data) === 1){
                    Swal.fire(
                        'Excluído',
                        'A série foi excluída com sucesso!',
                        'success'
                    );
                    setTimeout(function(){
                        window.location.reload(1);
                    }, 5000);
                }
            });
        }
    });
}