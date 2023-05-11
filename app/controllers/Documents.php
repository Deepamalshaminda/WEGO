<?php 
class Documents extends Controller
{
    private $documentModel;

    public function __construct() {
        $this->documentModel = $this->model('documentModel');
    }

    // Function to get all vehicles and their documents for a supplier
    public function vehicleDocs() {
        // Check if user is logged in and is a supplier
        if(!isLoggedIn() || $_SESSION['user_role'] != 'supplier') {
            redirect('users/login');
        }

        // Get vehicles and their documents for the logged in supplier
        $documents = $this->documentModel->getDocumentsBySupplier($_SESSION['id']);

        // Check if any vehicles were found
        if(!empty($documents)) {
            // Load view with vehicles and their documents
            $data = [
                'documents' => $documents
            ];
            $this->view('users/supplier/documents', $data);
        } else {
            // No documents found, show error message
            flash('document_message', 'No documents found', 'alert alert-warning');
            redirect('vehicles');
        }
    }
}
