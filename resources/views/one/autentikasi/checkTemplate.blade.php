<style>
    body {
        background-color: #4F4A45;
    }
</style>
<table style="width: 100%;">
    <tr>
        <td style="padding: 10px; text-align: center;">
            <table style="width: 100%;">
                <tr>
                    <td style="text-align: center;">
                        <img src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                            alt="{{ UtilsHelp::settingApp()->logo_settings }}"
                            style="width: 110px; border-radius: 10px;"></noscript>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 30px;">
                        <table
                            style="margin: 0 auto; padding: 50px; background-color: #0F0F0F; border-radius: 10px; box-shadow: 5px 3px 15px -1px #F1EFEF">
                            <tr>
                                <td style="text-align: left;">
                                    <h1 style="color: #fff;">
                                        {{ UtilsHelp::settingApp()->setting_subject }}
                                    </h1>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    <p style="color: #fff;">
                                        {!! UtilsHelp::settingApp()->setting_contentemail !!}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <div style="box-shadow: rgba(0, 0, 0, 0.5); padding: 20px 0px; ">
                                        <a target="_blank"
                                            href="{{ route('forgotPassword.verifyResetPassword') }}?email={{ $email }}&token={{ $token }}"
                                            style="background-color: #4F4A45; padding: 15px; color: #fff; cursor: pointer; border-radius: 10px; outline: none; border-color: none; border:none; box-shadow: 2px 3px 6px #dfcdcd;
                                        font-weight: bold;">
                                            RESET PASSWORD
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #fff; text-align: left; padding-top: 20px;">
                                    {{ UtilsHelp::settingApp()->setting_penutupemail }}
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>

                <tr>
                    <td style="padding: 20px; padding-top: 40px; text-align: center; color: #fff;">&copy;
                        {{ UtilsHelp::settingApp()->setting_copyright }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
