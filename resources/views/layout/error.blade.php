
/**
 * Created by PhpStorm.
 * User: 神说要有光
 * Date: 2018/5/11
 * Time: 11:51
 */


@if(count($errors))
    <div class=" xuan" role="alert">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>>
        @endforeach
    </div>
@endif
