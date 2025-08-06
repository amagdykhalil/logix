{{-- 
    - skeleton loading 
    - hidden the pagination in no data or the page is one only 
--}}

@push('styles')
    <link rel="stylesheet" href="/path/to/your/datatable.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.4/howler.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.image-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom',
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300
                }
            });

            const table = $('.js-exportable-order').DataTable({
                dom: '<"hidden"fB>rtip',
                buttons: {!! json_encode($datatableSettings['buttons']) !!},
                order: {!! json_encode($datatableSettings['order']) !!},
                paging: {{ $datatableSettings['paging'] ? 'true' : 'false' }},
                searching: {{ $datatableSettings['searching'] ? 'true' : 'false' }},
                info: {{ $datatableSettings['info'] ? 'true' : 'false' }},
                pagingType: "full_numbers",
                pageLength: {{ $datatableSettings['limit'] ?? 10 }},
                drawCallback: function() {
                    let paginate = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
                    $('#custom-pagination-wrapper').html(paginate.clone(true));
                },
                language: {
                    emptyTable: `
            <div class="flex flex-col items-center justify-center py-12 px-4 text-center">
                <div class="w-24 h-24 mb-6 text-gray-400 dark:text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">لا توجد بيانات متاحة</h3>
                <p class="text-gray-500 dark:text-gray-400 max-w-md">
                    لم يتم العثور على سجلات مطابقة لبحثك. حاول تعديل معايير البحث أو إضافة بيانات جديدة.
                </p> 
            </div>
        `,
                    zeroRecords: `
            <div class="flex flex-col items-center justify-center py-16 px-4 text-center">
                <div class="w-24 h-24 mb-6 text-gray-400 dark:text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">لا توجد نتائج مطابقة</h3>
                <p class="text-gray-500 dark:text-gray-400 max-w-md">
                    لم نتمكن من العثور على أي سجلات تطابق بحثك. حاول تعديل كلمات البحث أو تصفية المعايير.
                </p>
            </div>
        `,
                    paginate: {
                        first: '<i class="fas fa-angle-double-left"></i>',
                        previous: '<i class="fas fa-angle-left"></i>',
                        next: '<i class="fas fa-angle-right"></i>',
                        last: '<i class="fas fa-angle-double-right"></i>'
                    },
                    search: "ابحث:",
                    info: "عرض _START_ إلى _END_ من _TOTAL_ نتيجة",
                    infoEmpty: "عرض 0 من 0 نتيجة",
                    infoFiltered: "(مفلترة من _MAX_ إجمالي العناصر)"
                },
                initComplete: function() {
                    $('#orders-table-skeleton').hide();
                    $('.js-exportable-order').removeClass('hidden');
                }
            });

            if ($('#customCopyBtn').length) {
                $('#customCopyBtn').on('click', function() {
                    table.button('.buttons-copy').trigger();
                });
            }

            if ($('#customCsvBtn').length) {
                $('#customCsvBtn').on('click', function() {
                    table.button('.buttons-csv').trigger();
                });
            }

            if ($('#customExcelBtn').length) {
                $('#customExcelBtn').on('click', function() {
                    table.button('.buttons-excel').trigger();
                });
            }

            if ($('#customPdfBtn').length) {
                $('#customPdfBtn').on('click', function() {
                    table.button('.buttons-pdf').trigger();
                });
            }

            $('#customSearchInput').on('input', function() {
                table.search(this.value).draw();
            });

            // Handle play button click to show/hide voice player
            const audioElements = {};
            let currentPlayingId = null;
            $(document).on('click', '.play-btn', function() {
                const row = $(this).closest('tr');
                const rowId = $(this).data('id');
                const voiceUrl = $(this).data('voice-url') || '/sounds/alert3.mp3';
                const $icon = $(this).find('i');

                // Check if child row exists
                if (row.next().hasClass('child-row')) {
                    // Toggle visibility
                    row.next().toggle();
                    $icon.toggleClass('fa-play fa-stop');

                    // Play/pause audio
                    if (audioElements[rowId]) {
                        const audio = audioElements[rowId];
                        if (!audio.paused) {
                            audio.pause();
                            $icon.removeClass('fa-stop').addClass('fa-play');
                            currentPlayingId = null;
                        } else {
                            // Stop currently playing audio if any
                            if (currentPlayingId && audioElements[currentPlayingId]) {
                                audioElements[currentPlayingId].pause();
                                $('.play-btn i').removeClass('fa-stop').addClass('fa-play');
                            }

                            audio.play().catch(e => {
                                console.error('Playback error:', e);
                                row.next().find('.audio-error').show();
                            });
                            $icon.removeClass('fa-play').addClass('fa-stop');
                            currentPlayingId = rowId;
                        }
                    }
                } else {
                    // Create new child row with custom audio player
                    const newRow = $(`
                        <tr class="child-row">
                            <td colspan="${row.find('td').length}">
                                <div class="voice-player-container">
                                    <div class="custom-audio-player !w-[calc(100vw-300px)] mr-auto ">
                                        <audio id="audio-${rowId}" controls preload="none">
                                            <source src="${voiceUrl}" type="audio/mpeg">
                                            المتصفح الخاص بك لا يدعم عنصر الصوت.
                                        </audio>
                                    </div>
                                    <div class="audio-error" style="display: none;">
                                        تعذر تحميل التسجيل الصوتي
                                    </div>
                                </div>
                            </td>
                        </tr>
                    `);

                    row.after(newRow);
                    $icon.removeClass('fa-play').addClass('fa-stop');

                    // Store audio element reference
                    const audio = document.getElementById(`audio-${rowId}`);
                    audioElements[rowId] = audio;

                    // Error handling
                    audio.addEventListener('error', function() {
                        console.error('Audio error:', rowId);
                        newRow.find('.audio-error').show();
                        $icon.removeClass('fa-stop').addClass('fa-play');
                    });

                    // Play ended handler
                    audio.addEventListener('ended', function() {
                        $icon.removeClass('fa-stop').addClass('fa-play');
                        currentPlayingId = null;
                    });

                    // Time update handler for progress tracking
                    audio.addEventListener('timeupdate', function() {
                        // You could add custom progress tracking here if needed
                    });

                    // Stop currently playing audio if any
                    if (currentPlayingId && audioElements[currentPlayingId]) {
                        audioElements[currentPlayingId].pause();
                        $('.play-btn i').removeClass('fa-stop').addClass('fa-play');
                    }

                    // Start playback
                    audio.play().catch(e => {
                        console.error('Playback error:', e);
                        newRow.find('.audio-error').show();
                        $icon.removeClass('fa-stop').addClass('fa-play');
                    });
                    currentPlayingId = rowId;
                }
            });

            // Clean up when rows are removed
            table.on('draw', function() {
                // Remove audio elements for rows that no longer exist
                Object.keys(audioElements).forEach(id => {
                    if (!$(`#audio-${id}`).length) {
                        delete audioElements[id];
                    }
                });
            });

            // Handle edit button click
            $(document).on('click', '.download-btn', function() {
                const id = $(this).data('id');
            });

            // Handle delete button click
            $(document).on('click', '.delete-btn', function() {
                const id = $(this).data('id');
                if (confirm('هل أنت متأكد من حذف هذا السجل؟')) {
                    alert('حذف السجل رقم: ' + id);
                }
            });

            // Handle share button click
            $(document).on('click', '.share-btn', function() {
                const id = $(this).data('id');
                alert('مشاركة السجل رقم: ' + id);
            });
        });
    </script>
@endpush
