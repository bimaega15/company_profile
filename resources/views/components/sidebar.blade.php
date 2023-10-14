@php
$structureTree = UtilsHelp::createStructureTree();
$hiddenTree = UtilsHelp::handleSidebar($structureTree);

ob_start();
echo UtilsHelp::renderSidebar($structureTree, null, $hiddenTree);
$outputSidebar = ob_get_clean();
@endphp
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{ asset('backend/html/') }}/assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>Admin</small>
                    </div>
                    <!-- <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a href="sign-in.html" title="Sign out"><i class="zmdi zmdi-power"></i></a> -->
                </div>
            </li>
            <li class="header">MAIN</li>
            {!! $outputSidebar !!}
        </ul>
    </div>
</aside>