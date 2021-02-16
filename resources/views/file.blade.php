<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> File Saved </title>
</head>
<body>

<h1>  File Foem Input </h1>
<button onClick=" {{ redirect('/file/ar') }}"> Arabic </button>
<button onclick=" {{ url('/file/en') }}"> English </button>
    <form action="{{ route('myfile.store') }}" method="post">
      <label for="title"> {{ trans('title.title') }} </label> <br>
      <input type="text" name="title" id="title"><br>
      <label for="content"> {{ trans('title.content') }}  </label><br>
      <textarea name="content" id="content" cols="100" rows="20" placeholder=" Enter Your Data Here"></textarea><br>
      <input type="submit" value=" {{ trans('title.send') }} ">
      <input type="hidden" name="_token" value={{ csrf_token() }}>

    </form>
</body>
</html>