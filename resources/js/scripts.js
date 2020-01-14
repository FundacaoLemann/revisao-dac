$(function () {

    $('[data-toggle="tooltip"]').tooltip()

    $('.filter-estado, .filter-project-assigned').change(function(){

        var estado = $('.filter-estado').val();
        var assigned = $('.filter-project-assigned').val();

        filterProjects(estado, assigned);

    });

    $('.filter-reviewer-assigned').change(function(){

        var assigned = $('.filter-reviewer-assigned').val();

        filterReviewer(assigned);

    });

});

function filterProjects(estado, assigned)
{
    $('.project-row').addClass('d-none');

    var dataFilter = '';

    if(estado) {
        dataFilter += "[data-estado='" + estado + "']";
    }

    if(assigned) {
        dataFilter += "[data-assigned='" + assigned + "']";
    }

    $('.project-row' + dataFilter).removeClass('d-none');
}

function filterReviewer(assigned)
{
    if(assigned) {
        $('.reviewer-row').addClass('d-none');

        $(".reviewer-row[data-assigned='" + assigned + "']").removeClass('d-none');
    } else {
        $('.reviewer-row').removeClass('d-none');
    }
}
