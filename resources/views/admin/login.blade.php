@extends('loginlayout')
@section('content')
  
<div class="container">
    <table width="100%" height="100%" border="0" cellspacing="0" align="center">
        <tr>
            <td align="center" valign="middle">
                <table class="table-bordered" width="350" border="0" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
              
                  
                          <tr>
                              <td height="25" colspan="2" align="left" valign="middle" bgcolor="#FF9900" class="style2">
                                  <div align="center">
                                  <strong>Admin Login</strong>
                                  </div>
                              </td>
                          </tr>
                        <tr>
                            <div id="err" style="color: red">
                                @if(session()->has('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                            </div>
                        </tr>
                        <form  action="{{ route('admin.check') }}" method="POST">
                            @csrf
                            <tr>
                                <td width="118" align="left" valign="middle" class="style1">Email</td>
                                <td width="118" align="left" valign="middle" class="style1">
                                    <input type="email" name="email" class="form-control" size="10px" id="email" placeholder="UserEmail">
                                </td>
                            </tr>

                            <tr>
                                <td width="118" align="left" valign="middle" class="style1">Password</td>
                                <td width="118" align="left" valign="middle" class="style1">
                                    <input type="password" name="password" class="form-control" size="10px" id="password" placeholder="password">
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="border-right-width: 0;" align="center"><a href="">register</a></td>
                                <td align="right" valign="middle" class="style1" style="border-left-width:0;" align="center">
                                    <button type="submit" class="btn btn-primary" >Sign In</button>
                                </td>
                            </tr>
                    </form>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
@endsection

@push('css')
<style type="text/css">
        body,td,th{
            color: #000000;
           
        }
        body{
            background-color: #F0F0F0;
            
        }
        .style1
        {
            font-family: arial, helvetica, sans-serif;
            font-size: 14px;
            padding: 12px;
            line-height: 25px;
            border-radius: 4px;
            text-decoration: none;
        }
        .style2
        {
            font-family: arial, helvetica, sans-serif;
            font-size: 17px;
            padding: 12px;
            line-height: 25px;
            border-radius: 4px;
            text-decoration: none;
        }
    </style>
@endpush