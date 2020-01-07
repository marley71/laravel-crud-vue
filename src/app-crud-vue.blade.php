<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- minimal crud-vue css -->
    <link href="/crud-vue/crud-vue.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

    <!-- Vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- crud-vue.js -->
    <script src="/crud-vue/crud-vue.js"></script>


</head>
<body>
    <div id="app">
        <!-- application source template -->
    </div>

    <!-- istanza crud-vue -->
    <script>
        app = new CrudApp({
            data : {
                templatesFile : '/crud-vue/crud-vue.html',  // template file, change this for your custom templates
                pluginsPath : '/plugins/',                  // folder javascript where crud look for components that use plugins
                el : '#app'
            },
        });
    </script>

</body>
</html>
