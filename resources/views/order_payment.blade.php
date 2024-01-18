<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Payment - {{ $order->uniq }} - Haris Fotocopy</title>
    </head>
    <body>
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
        <script type="text/javascript">
            snap.pay('{{ $order->snap_token }}', {
              // Optional
              onSuccess: function(result){
                    
                },
              // Optional
              onPending: function(result){
              },
              // Optional
              onError: function(result){
              }
            });
        </script>        
    </body>
</html>