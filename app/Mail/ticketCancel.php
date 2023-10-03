<?php

namespace App\Mail;

use App\Models\Pesanan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ticketCancel extends Mailable
{
    use Queueable, SerializesModels;


    protected $pesanan;
    /**
     * Create a new message instance.
     */
    public function __construct(Pesanan $pesanan)
    {
        $this->pesanan = $pesanan;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ticket Ditolak',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        $data = [
            'pesanan' => $this->pesanan,
        ];

        return $this->view('mail.ticket-cancel', $data);
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
