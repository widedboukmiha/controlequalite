<html> 
<head>
<title>

</title>
</head>
<body>
<div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>numero demande:</strong>
                {{ $demande->num_demande }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nature demande:</strong>
                {{ $demande->nature_demande }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date demande:</strong>
                {{ $demande->date_demande }}
            </div>
        </div>

    </div>



</body>

</html>