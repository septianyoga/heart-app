@extends('admin.base.layout', ['title' => 'Konsultasi Chat'])

@section('page-content')

    <div class="row chat-wrapper">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row position-relative">
                        <div class="col-lg-4 chat-aside border-end-lg">
                            <div class="aside-content">
                                <div class="aside-header">
                                    <div class="d-flex justify-content-between align-items-center pb-2 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6>Riwayat Chat</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aside-body">
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane fade show active" id="chats" role="tabpanel"
                                            aria-labelledby="chats-tab">
                                            <div>
                                                <ul class="list-unstyled chat-list px-1">
                                                    <li class="chat-item pe-1">
                                                        <a href="javascript:;" class="d-flex align-items-center">
                                                            <figure class="mb-0 me-2">
                                                                <img src="https://via.placeholder.com/37x37"
                                                                    class="img-xs rounded-circle" alt="user">
                                                                <div class="status online"></div>
                                                            </figure>
                                                            <div
                                                                class="d-flex justify-content-between flex-grow-1 border-bottom">
                                                                <div>
                                                                    <p class="text-body fw-bolder">John Doe</p>
                                                                    <p class="text-secondary fs-13px">Hi, How are you?</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-end">
                                                                    <p class="text-secondary fs-13px mb-1">4:32 PM</p>
                                                                    <div class="badge rounded-pill bg-primary ms-auto">5
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="chat-item pe-1">
                                                        <a href="javascript:;" class="d-flex align-items-center">
                                                            <figure class="mb-0 me-2">
                                                                <img src="https://via.placeholder.com/37x37"
                                                                    class="img-xs rounded-circle" alt="user">
                                                                <div class="status offline"></div>
                                                            </figure>
                                                            <div
                                                                class="d-flex justify-content-between flex-grow-1 border-bottom">
                                                                <div>
                                                                    <p class="text-body">John Doe</p>
                                                                    <p class="text-secondary fs-13px">Hi, How are you?</p>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-end">
                                                                    <p class="text-secondary fs-13px mb-1">Yesterday</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 chat-content">
                            <div class="chat-header border-bottom pb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="corner-up-left" id="backToChatList"
                                            class="icon-lg me-2 ms-n2 text-secondary d-lg-none"></i>
                                        <figure class="mb-0 me-2">
                                            <img src="https://via.placeholder.com/43x43" class="img-sm rounded-circle"
                                                alt="image">
                                            <div class="status online"></div>
                                            <div class="status online"></div>
                                        </figure>
                                        <div>
                                            <p>Mariana Zenha</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-body">
                                <ul class="messages">
                                    <li class="message-item friend">
                                        <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle"
                                            alt="avatar">
                                        <div class="content">
                                            <div class="message">
                                                <div class="bubble">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.</p>
                                                </div>
                                                <span>8:12 PM</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="message-item me">
                                        <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle"
                                            alt="avatar">
                                        <div class="content">
                                            <div class="message">
                                                <div class="bubble">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                            {{--  Contoh 2 message  --}}
                                            <div class="message">
                                                <div class="bubble">
                                                    <p>Contoh 2 Message</p>
                                                </div>
                                            </div>
                                            <div class="message">
                                                <div class="bubble">
                                                    <p>Contoh 2 Message</p>
                                                </div>
                                                <span>8:13 PM</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-footer d-flex">
                                <form class="search-form flex-grow-1 me-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded-pill" id="chatForm"
                                            placeholder="Type a message">
                                    </div>
                                </form>
                                <div>
                                    <button type="button" class="btn btn-primary btn-icon rounded-circle">
                                        <i data-feather="send"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
