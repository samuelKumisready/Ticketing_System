<div class="row row-sm">
    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
        <div class="card custom-card">
            <div class="main-content-app pt-0">
                <div class="main-content-left main-content-left-chat">
                    <div class="card-body">
                        <div class="input-group">
                            <input wire:model.debounce.300ms="searchTerm" type="text" class="form-control"
                                placeholder="Search ...">
                            <span class="input-group-append">
                                <button class="btn ripple btn-primary bg-custom_purple_color" type="button"
                                    wire:click="filterTickets()">Search</button>
                            </span>
                        </div>
                    </div>
                    <nav class="nav main-nav-line main-nav-line-chat card-body ">
                        <div class="flex space-x-4 mb-4">
                            <div class="flex items-center">
                                <div class="flex text-sm">
                                    <p class="mt-3 block text-sm font-medium text-gray-400"> Filter by </p>
                                    <div class="relative mt-1 ml-2">
                                        <select wire:model="selectedCategory" wire:change="filterTickets()"
                                            class="block w-full px-2 py-2.5 pr-2 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">
                                            <option value="">Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <div
                                            class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="flex">
                                    <div class="relative mt-1">
                                        <select wire:model="selectedStatus" wire:change="filterTickets()"
                                            class="block w-full px-3 py-2.5 pr-8 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">
                                            <option value="">Status</option>
                                            <option value="open">Open</option>
                                            <option value="closed">Closed</option>
                                            <option value="in_progress">In Progress</option>
                                        </select>
                                        <div
                                            class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </nav>
                    <div class="tab-content main-chat-list">
                        <div class="tab-pane active" id="ChatList">
                            <div class="main-chat-list tab-pane customscrollbar2 "
                                style="max-height: 390px; overflow-y: auto; ">
                                @foreach ($tickets as $ticket)
                                    <a class="media new {{ $selectedTicketId === $ticket->id ? 'bg-gray-500' : '' }}"
                                        wire:click="showTicketDetails({{ $ticket->id }})">
                                        <div class="main-img-user online">
                                            <img alt="" src="assets/img/users/5.jpg"> <span>2</span>
                                        </div>
                                        <div class="media-body">
                                            <div class="media-contact-name">
                                                <span>{{ $ticket->createdBy->name }}</span>
                                                <span>{{ $ticket->created_at->diffForHumans() }}</span>
                                            </div>
                                            <p>{{ $ticket->title }}</p>
                                        </div>
                                    </a>
                                @endforeach

                            </div><!-- main-chat-list -->
                        </div><!-- main-chat-list -->
                    </div>
                    <!-- main-chat-list -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
        @if ($selectedTicket)
            <div class="card custom-card">
                <div class="main-content-app pt-0">
                    <div class="main-content-body main-content-body-chat">
                        <div class="main-chat-header pt-3">
                            <div class="main-chat-msg-name">
                                <h6 class="text-uppercase text-gray-800 mb-2">{{ $selectedTicket->title }}</h6>
                                @if ($selectedTicket->status === 'open')
                                    <span
                                        class="bg-custom_purple_color p-0.5 px-1 rounded text-white mr-3 ">{{ $selectedTicket->status }}</span>
                                @else
                                    <span
                                        class="bg-gray-600 p-0.5  px-1 rounded text-white mr-2 ">{{ $selectedTicket->status }}</span>
                                @endif
                                <small class="bg-red-300  p-1 rounded text-white px-2">
                                    # {{ $selectedTicket->id }}
                                </small>
                            </div>
                            <nav class="nav items-center">
                                @if ($selectedTicket->status === 'open')
                                    <button wire:click="closeTicket({{ $selectedTicket->id }})"
                                        class="bg-red-600 rounded-lg px-2 py-1 text-white font-semibold hover:bg-red-500 transform duration-200 text-smN">Close
                                        Ticket</button>
                                @else
                                    <button wire:click="openTicket({{ $selectedTicket->id }})"
                                        class="bg-blue-600 rounded-lg px-2 py-1 text-white font-semibold hover:bg-blue-500 transform duration-200 text-smN">Open
                                        Ticket</button>
                                @endif
                            </nav>
                        </div><!-- main-chat-header -->
                        <div class="main-chat-body customscrollbar2" id="ChatBody"
                            style="max-height: 330px; overflow-y: auto; ">
                            <div class="content-inner">

                                <div class="media flex-row-reverse">
                                    <div class="main-img-user online"><img alt="avatar" src="assets/img/users/2.jpg">
                                    </div>
                                    <div class="media-body">
                                        <div class="main-msg-wrapper">
                                            {{ $selectedTicket->description }}
                                        </div>

                                        <div>
                                            <span>{{ $selectedTicket->created_at->format('H:i:s') }} am</span> <a
                                                href="#"><i class="icon ion-android-more-horizontal"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($selectedTicket->comments as $comment)
                                    @if ($comment->user->role === 'administrator')
                                        <div class="media">
                                            <div class="main-img-user online"><img alt="avatar"
                                                    src="assets/img/users/1.jpg">
                                            </div>

                                            <div class="media-body">
                                                <div class="main-msg-wrapper">
                                                    {{ $comment->comment_text }}
                                                </div>
                                                <div>
                                                    <span>9:32 am</span> <a href="#"><i
                                                            class="icon ion-android-more-horizontal"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($comment->user->role === 'student')
                                        <div class="media flex-row-reverse">
                                            <div class="main-img-user online"><img alt="avatar"
                                                    src="assets/img/users/2.jpg">
                                            </div>
                                            <div class="media-body">
                                                <div class="main-msg-wrapper">
                                                    {{ $comment->comment_text }}
                                                </div>
                                                <div>
                                                    <span>{{ $comment->created_at->format('H:i:s') }}</span> <a
                                                        href="#"><i
                                                            class="icon ion-android-more-horizontal"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                    {{--  @php
                                    $commentTime = Carbon\Carbon::parse($comment->created_at);
                                    $timeDifference = $currentTime->diffInHours($commentTime);
                                @endphp
                                @if ($timeDifference > 24)
                                    <label class="main-chat-time">
                                        <span>{{ $comment->created_at->diffForHumans() }}</span>
                                    </label>
                                @endif  --}}
                                @endforeach

                            </div>
                        </div>
                        <div class="main-chat-footer">
                            <input class="form-control" placeholder="Type your message here..." type="text"
                                wire:model="comments">
                            <a class="main-msg-send" href="#"><i class="far fa-paper-plane"
                                    wire:click="sendComment"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>


@push('scripts')
    <script>
        // Listen for the ticketClosed event and update the ticket list
        Livewire.on('ticketClosed', () => {
            // Refresh the ticket list
            @this.call('filterTickets');
        });
        Livewire.on('ticketOpened', () => {
            // Refresh the ticket list
            @this.call('filterTickets');
        });
    </script>
@endpush
