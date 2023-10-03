<?php

namespace App\Mail;

use App\Models\Pesanan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ticketSuccess extends Mailable
{
    use Queueable, SerializesModels;

    protected $pesanan;
    protected $status_kursi;
    /**
     * Create a new message instance.
     */
    public function __construct(Pesanan $pesanan, $status_kursi )
    {
        $this->pesanan = $pesanan;
        $this->status_kursi = $status_kursi;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Movie Flix',
        );
    }

    public function build()
    {
        $data = [
            'pesanan' => $this->pesanan,
            'status_kursi' => $this->status_kursi,
        ];

        return $this->view('mail.ticket-success', $data);
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {


    //     return new Content(
    //         view: 'mail.ticket-success',
    //     );
    // }

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
