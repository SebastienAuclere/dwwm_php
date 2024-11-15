namespace Testing
{
    class Program
    {
        static void Main(string[] args)
        {

            int nombre;
            string saisie;

            Console.WriteLine("Saisir un nombre");

            saisie = Console.ReadLine();
            nombre = int.Parse(saisie);

            Console.WriteLine(factorial_Recursion(nombre));
        }

        public static double factorial_Recursion(int nombre)
        {
            if (nombre == 1)
                return 1;
            else
                return nombre * factorial_Recursion(nombre - 1);
        }
    }
}