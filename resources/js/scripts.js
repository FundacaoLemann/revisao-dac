$(function () {

    $('[data-toggle="tooltip"]').tooltip();

    $('[data-toggle="popover"]').popover({
        html: true
    });

    $('.popover-dismiss').popover({
        trigger: 'focus'
    });

    $('.filter-estado, .filter-project-assigned').change(function(){

        var estado = $('.filter-estado').val();
        var assigned = $('.filter-project-assigned').val();

        filterProjects(estado, assigned);

    });

    $('.filter-estado-dashboard, .filter-status-project').change(function(){

        var estado = $('.filter-estado-dashboard').val();
        var projectStatus = $('.filter-status-project').val();

        filterProjectsDashboard(estado, projectStatus);

    });

    $('.filter-reviewer-assigned').change(function(){

        var assigned = $('.filter-reviewer-assigned').val();

        filterReviewer(assigned);

    });

    $('.filter-reviewer-project').change(function(){
        filterReviewerProject($(this).val());
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

function filterReviewerProject(reviewed)
{
    if(reviewed) {
        $('.reviewer-project-row').addClass('d-none');

        $(".reviewer-project-row[data-reviewed='" + reviewed + "']").removeClass('d-none');
    } else {
        $('.reviewer-project-row').removeClass('d-none');
    }
}

function filterProjectsDashboard(estado, projectStatus)
{
    $('.project-row').addClass('d-none');

    var dataFilter = '';

    if(estado) {
        dataFilter += "[data-estado='" + estado + "']";
    }

    if(projectStatus) {
        dataFilter += "[data-project-status='" + projectStatus + "']";
    }

    $('.project-row' + dataFilter).removeClass('d-none');
}
