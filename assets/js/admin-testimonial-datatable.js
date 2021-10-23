$(document).ready(function () {
    $('#database_testimonial').DataTable({
        "language": {
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty": "No entries found",
            "infoFiltered": "(filtered1 from _MAX_ total entries)",
            "lengthMenu": "_MENU_ entries",
            "search": "Search:",
            "zeroRecords": "No matching records found"
        },

        buttons: [{
                extend: 'print',
                className: 'btn dark btn-outline'
            },
            {
                extend: 'copy',
                className: 'btn red btn-outline'
            },
            // { extend: 'pdf', className: 'btn green btn-outline' },
            {
                extend: 'excel',
                className: 'btn yellow btn-outline ',
                title: 'list-of-request-a-demo'
            },
            {
                extend: 'csv',
                className: 'btn purple btn-outline ',
                title: 'list-of-request-a-demo'
            },
            // { extend: 'colvis', className: 'btn dark btn-outline', text: 'Columns' }
        ],

        // setup responsive extension: http://datatables.net/extensions/responsive/
        responsive: true,

        //"ordering": false, disable column ordering 
        //"paging": false, disable pagination

        "order": [
            [0, 'asc']
        ],

        "lengthMenu": [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"] // change per page values here
        ],
        // set the initial value
        "pageLength": 10,

        "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        "processing": true,
        "ajax": {
            "url": base_url + "admin/fetch-testimonial-data",
            "type": "POST",
            // "data": { userAuthToken: userAuthToken, fetchActions: 'true' },
            dataSrc: function (json) {
                var obj = json['testimonials'];
                console.log(obj);
                return obj;
            }
        },
        "columnDefs": [{
            "width": "5%"
        }, {
            "width": "5%"
        }, {
            "width": "5%"
        }],
        "columns": [{
            "data": "Name"
        }, {
            "data": "Message"
        }, {
            "data": "actions"
        }]

    });

});