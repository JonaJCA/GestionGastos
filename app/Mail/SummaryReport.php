<?php

namespace App\Mail;

use App\Models\ExpenseReport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SummaryReport extends Mailable
{
    use Queueable, SerializesModels;

    private $expenseReport;
    /**
     * Create a new message instance.
     *@param ExpenseReport $expenseReport
     * @return void
     */
    public function __construct(ExpenseReport $expenseReport)
    {
        $this->expenseReport = $expenseReport;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Reporte de Gastos',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->view('mail.expenseReport', [
            'report' => $this->expenseReport
        ]);
    }
}
